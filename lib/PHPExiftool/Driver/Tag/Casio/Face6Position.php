<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Casio;

class Face6Position extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'Face6Position';

    protected $FullName = 'mixed';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Face 6 Position';

    protected $flag_Permanent = true;

    protected $MaxLength = 4;

}
