<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFAreaMode extends AbstractTagGroup
{
    protected string $id = 'Canon:AFAreaMode';

    protected string $name = 'AFAreaMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'AF Area Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::AFInfo2
             * line : 2593
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Canon::AFInfo2.Canon:AFAreaMode',
            'desc' => [
                'en' => 'AF Area Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
