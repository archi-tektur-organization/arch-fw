<?php
/**
 * ArchFramework (ArchFW in short) is universal template for server-side rendered applications and services.
 * ArchFW comes with pre-installed router and JSON API functionality.
 * Visit https://github.com/archi-tektur/ArchFW/ for more info.
 *
 * PHP version 7.2
 *
 * @category  Framework/Boilerplate
 * @package   ArchFW
 * @author    Oskar 'archi-tektur' Barcz <kontakt@archi-tektur.pl>
 * @copyright 2018 Oskar 'archi_tektur' Barcz
 * @license   MIT https://opensource.org/licenses/MIT
 * @version   2.8.0
 * @link      https://github.com/archi-tektur/ArchFW/
 */

namespace ArchFW\Interfaces;

use ArchFW\Exceptions\NoFileFoundException;

/**
 * Defines renderer factory methods
 *
 * @package ArchFW\Interfaces
 */
interface RendererFactoryInterface
{
    /**
     * Method returns proper renderer depending on content
     *
     * @return Renderable returns renderer to be used
     * @throws NoFileFoundException
     */
    public function getRenderer(): Renderable;
}
