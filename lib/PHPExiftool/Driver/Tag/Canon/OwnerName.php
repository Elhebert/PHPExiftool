<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Canon;

class OwnerName extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'OwnerName';

    protected $FullName = 'mixed';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Owner Name';

    protected $flag_Permanent = true;

    protected $MaxLength = 32;

}
