<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImageLength extends AbstractTagGroup
{
    protected string $id = 'Olympus:PreviewImageLength';

    protected string $name = 'PreviewImageLength';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Preview Image Length',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::Main
             * line : 177389
             * type : ?
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Olympus::Main.Olympus:PreviewImageLength',
            'desc' => [
                'en' => 'Preview Image Length',
            ],
        ],
        1 => [
            /**
             * table_name : Olympus::scrn
             * line : 182219
             * type : int32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::scrn.Olympus:PreviewImageLength',
            'desc' => [
                'en' => 'Preview Image Length',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
