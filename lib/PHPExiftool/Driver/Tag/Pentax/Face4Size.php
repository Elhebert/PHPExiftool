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

class Face4Size extends \PHPExiftool\Driver\Tag
{

    protected $Id = 6;

    protected $Name = 'Face4Size';

    protected $FullName = 'Pentax::FaceSize';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Face 4 Size';

    protected $flag_Permanent = true;

    protected $MaxLength = 2;

}
