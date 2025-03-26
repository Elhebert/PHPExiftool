<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AudioNoiseReductionAlgorithm extends AbstractTagGroup
{
    protected string $id = 'MXF:AudioNoiseReductionAlgorithm';

    protected string $name = 'AudioNoiseReductionAlgorithm';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Audio Noise Reduction Algorithm',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114653
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:AudioNoiseReductionAlgorithm',
            'desc' => [
                'en' => 'Audio Noise Reduction Algorithm',
            ],
        ],
    ];

    protected int $count = 0;
}
