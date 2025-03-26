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
class AsShotICCProfile extends AbstractTagGroup
{
    protected string $id = 'IFD0:AsShotICCProfile';

    protected string $name = 'AsShotICCProfile';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'As Shot ICC Profile',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 84390
             * type : undef
             * writable : true
             * count :
             * flags : binary,unsafe
             */
            'id' => 'Exif::Main.IFD0:AsShotICCProfile',
            'desc' => [
                'en' => 'As Shot ICC Profile',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2066;
}
