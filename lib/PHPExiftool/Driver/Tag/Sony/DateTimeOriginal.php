<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Sony;

class DateTimeOriginal extends \PHPExiftool\Driver\Tag
{

    protected $Id = 76;

    protected $Name = 'DateTimeOriginal';

    protected $FullName = 'Sony::PMP';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Date/Time Original';

    protected $local_g2 = 'Time';

    protected $flag_Permanent = true;

    protected $MaxLength = 6;

}
