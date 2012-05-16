<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Theora;

class PixelAspectRatio extends \PHPExiftool\Driver\Tag
{

    protected $Id = 23;

    protected $Name = 'PixelAspectRatio';

    protected $FullName = 'Theora::Identification';

    protected $GroupName = 'Theora';

    protected $g0 = 'Theora';

    protected $g1 = 'Theora';

    protected $g2 = 'Video';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'Pixel Aspect Ratio';

    protected $MaxLength = 3;

}
