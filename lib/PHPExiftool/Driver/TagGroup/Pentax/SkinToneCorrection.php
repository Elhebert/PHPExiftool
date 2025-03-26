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
class SkinToneCorrection extends AbstractTagGroup
{
    protected string $id = 'Pentax:SkinToneCorrection';

    protected string $name = 'SkinToneCorrection';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Skin Tone Correction',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::Main
             * line : 209592
             * type : int8s
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:SkinToneCorrection',
            'desc' => [
                'en' => 'Skin Tone Correction',
            ],
        ],
        1 => [
            /**
             * table_name : Pentax::Main
             * line : 209606
             * type : int8s
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:SkinToneCorrection',
            'desc' => [
                'en' => 'Skin Tone Correction',
            ],
        ],
    ];

    protected int $flags = 2052;
}
