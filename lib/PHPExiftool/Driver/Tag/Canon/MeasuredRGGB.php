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

class MeasuredRGGB extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1;

    protected $Name = 'MeasuredRGGB';

    protected $FullName = 'Canon::MeasuredColor';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Measured RGGB';

    protected $flag_Permanent = true;

    protected $MaxLength = 4;

}
