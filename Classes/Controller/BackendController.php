<?php
namespace Macopedia\DoctrineDbal\Controller;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Class BackendController
 * @package Macopedia\DoctrineDbal\Controller
 */
class BackendController extends ActionController
{
    /**
     * @return string
     */
    public function indexAction()
    {
        // will throw an error if $GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)
            ->getQueryBuilderForTable('pages');

        // test query
        $results = $queryBuilder
            ->select('uid', 'title')
            ->from('pages')
            ->setMaxResults(10)
            ->where($queryBuilder->expr()->gt('uid', $queryBuilder->createNamedParameter(42, \PDO::PARAM_INT)))
            ->execute()
            ->fetchAll();

        var_dump($results);
        return __CLASS__;
    }
}
