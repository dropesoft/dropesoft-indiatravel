<?php
namespace Dropesoft\Indiatravel\Controller;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * ArticleController
 */
class ArticleController extends BaseController
{
    /**
     * articleRepository
     *
     * @var \Dropesoft\Indiatravel\Domain\Repository\ArticleRepository
     * @inject
     */
    protected $articleRepository;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $articles = $this->articleRepository->findAll();
        $this->view->assign('articles', $articles);
    }
    
    /**
     * action show
     *
     * @param \Dropesoft\Indiatravel\Domain\Model\Article $article
     * @return void
     */
    public function showAction(\Dropesoft\Indiatravel\Domain\Model\Article $article)
    {
        $this->view->assign('article', $article);
    }

}