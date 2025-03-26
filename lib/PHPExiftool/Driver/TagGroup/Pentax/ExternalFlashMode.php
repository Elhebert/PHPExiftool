<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExternalFlashMode extends AbstractTagGroup
{
    protected string $id = 'Pentax:ExternalFlashMode';

    protected string $name = 'ExternalFlashMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'External Flash Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::FlashInfo
             * line : 199926
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::FlashInfo.Pentax:ExternalFlashMode',
            'desc' => [
                'en' => 'External Flash Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
