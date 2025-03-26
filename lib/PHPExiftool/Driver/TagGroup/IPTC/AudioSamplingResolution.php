<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IPTC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AudioSamplingResolution extends AbstractTagGroup
{
    protected string $id = 'IPTC:AudioSamplingResolution';

    protected string $name = 'AudioSamplingResolution';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Audio Sampling Resolution',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : IPTC::ApplicationRecord
             * line : 104066
             * type : digits
             * writable : true
             * count : 2
             * flags :
             */
            'id' => 'IPTC::ApplicationRecord.IPTC:AudioSamplingResolution',
            'desc' => [
                'en' => 'Audio Sampling Resolution',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2048;
}
