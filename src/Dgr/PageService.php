<?php
/**
 * @author Dmitry Groza <boxfrommars@gmail.com>
 */

namespace Dgr;

use Doctrine\DBAL\Connection;

class PageService {

    /** @var  Connection */
    protected $_db;

    public function __construct($db) {
        $this->_db = $db;
    }

    /**
     * @return array
     */
    public function fetchAll() {
        $pagesQuery = $this->_db->prepare("SELECT array_to_string(array_agg(a.page_url ORDER BY a.path), '/') AS url, p.* FROM page AS p
INNER JOIN page AS a ON a.path @> p.path GROUP BY p.id, p.path, p.page_url ORDER BY \"order\"");
        $pagesQuery->execute();
        $pages = $pagesQuery->fetchAll();
        return $pages;
    }

    public function fetch($id) {
        return $this->_db->fetchAssoc('SELECT * FROM poem WHERE id = ?', array($id));
    }

    /**
     * @param     $page
     * @param     $pages
     * @param int $count
     * @return array
     */
    function getPager($page, $pages, $count = 6) {
        $pager = array();
        $id = null;
        $totalPages = count($pages);
        foreach ($pages as $k => $p) {
            if ($p['id'] === $page['id']) {
                $id = $k;
                $pager[$id] = $page;
                $i = 1;
                $a = 1;
                while (count($pager) < $count && count($pager) < $totalPages) {
                    if (isset($pages[$id + $a]) && $pages[$id + $a]['name'] != 'main'){
                        $pager[$id + $a] = $pages[$id + $a];
                    }
                    $i++;
                    $a = $a + (-$a/abs($a))*$i;
                }
                break;

            }
        }
        ksort($pager);
        return array('content' => $pager, 'id' => $id);
    }

    public function getContentTable($pages) {
        $collections = array();
        foreach ($pages as $page) {
            if ($page['entity'] == 'poem_collection') {
                $collections[$page['id']] = array(
                    'data' => $page,
                    'items' => array(),
                );
            }
        }
        foreach ($pages as $page) {
            if ($page['entity'] == 'poem') {
                $collections[$page['id_parent']]['items'][] = $page;
            }
        }

        return $collections;
    }
} 