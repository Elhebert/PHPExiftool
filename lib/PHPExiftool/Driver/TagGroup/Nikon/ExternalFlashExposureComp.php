<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExternalFlashExposureComp extends AbstractTagGroup
{
    protected string $id = 'Nikon:ExternalFlashExposureComp';

    protected string $name = 'ExternalFlashExposureComp';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'External Flash Exposure Comp',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::Main
             * line : 132890
             * type : undef
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::Main.Nikon:ExternalFlashExposureComp',
            'desc' => [
                'en' => 'External Flash Exposure Comp',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
