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
class AFFineTuneAdj extends AbstractTagGroup
{
    protected string $id = 'Nikon:AFFineTuneAdj';

    protected string $name = 'AFFineTuneAdj';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Fine Tune Adj',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::AFTune
             * line : 129868
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AFTune.Nikon:AFFineTuneAdj',
            'desc' => [
                'en' => 'AF Fine Tune Adj',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ShotInfoD300a
             * line : 138099
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD300a.Nikon:AFFineTuneAdj',
            'desc' => [
                'en' => 'AF Fine Tune Adj',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::ShotInfoD300b
             * line : 138243
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD300b.Nikon:AFFineTuneAdj',
            'desc' => [
                'en' => 'AF Fine Tune Adj',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::ShotInfoD300b
             * line : 138371
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD300b.Nikon:AFFineTuneAdj',
            'desc' => [
                'en' => 'AF Fine Tune Adj',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
