<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EffectType extends AbstractTagGroup
{
    protected string $id = 'Samsung:EffectType';

    protected string $name = 'EffectType';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Effect Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Samsung::SingleShotMeta
             * line : 234270
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Samsung::SingleShotMeta.Samsung:EffectType',
            'desc' => [
                'en' => 'Effect Type',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
