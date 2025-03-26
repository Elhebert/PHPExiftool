<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GoPro;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EscapeStatus extends AbstractTagGroup
{
    protected string $id = 'GoPro:EscapeStatus';

    protected string $name = 'EscapeStatus';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Escape Status',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GoPro::GPMF
             * line : 97617
             * type : ?
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'GoPro::GPMF.GoPro:EscapeStatus',
            'desc' => [
                'en' => 'Escape Status',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
