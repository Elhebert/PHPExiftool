<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Pentax;

class Face22Position extends \PHPExiftool\Driver\Tag
{

    protected $Id = 42;

    protected $Name = 'Face22Position';

    protected $FullName = 'Pentax::FacePos';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Face 22 Position';

    protected $flag_Permanent = true;

    protected $MaxLength = 2;

}
