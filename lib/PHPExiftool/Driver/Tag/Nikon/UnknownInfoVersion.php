<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Nikon;

class UnknownInfoVersion extends \PHPExiftool\Driver\Tag
{

    protected $Id = 0;

    protected $Name = 'UnknownInfoVersion';

    protected $FullName = 'Nikon::UnknownInfo';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'undef';

    protected $Writable = true;

    protected $Description = 'Unknown Info Version';

    protected $flag_Permanent = true;

    protected $MaxLength = 4;

}
