<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\ITC;

class ImageType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 5;

    protected $Name = 'ImageType';

    protected $FullName = 'ITC::Item';

    protected $GroupName = 'ITC';

    protected $g0 = 'ITC';

    protected $g1 = 'ITC';

    protected $g2 = 'Image';

    protected $Type = 'undef';

    protected $Writable = false;

    protected $Description = 'Image Type';

    protected $MaxLength = 4;

}
