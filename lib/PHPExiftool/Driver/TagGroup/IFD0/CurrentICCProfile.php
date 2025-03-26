<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CurrentICCProfile extends AbstractTagGroup
{
    protected string $id = 'IFD0:CurrentICCProfile';

    protected string $name = 'CurrentICCProfile';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Current ICC Profile',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 84396
             * type : undef
             * writable : true
             * count :
             * flags : binary,unsafe
             */
            'id' => 'Exif::Main.IFD0:CurrentICCProfile',
            'desc' => [
                'en' => 'Current ICC Profile',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2066;
}
