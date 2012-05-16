<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Sanyo;

class FacePosition extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4;

    protected $Name = 'FacePosition';

    protected $FullName = 'Sanyo::FaceInfo';

    protected $GroupName = 'Sanyo';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sanyo';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Face Position';

    protected $flag_Permanent = true;

    protected $MaxLength = 4;

}
