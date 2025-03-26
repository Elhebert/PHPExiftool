<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCapture;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HighlightProtection extends AbstractTagGroup
{
    protected string $id = 'NikonCapture:HighlightProtection';

    protected string $name = 'HighlightProtection';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Highlight Protection',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCapture::HighlightData
             * line : 141665
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCapture::HighlightData.NikonCapture:HighlightProtection',
            'desc' => [
                'en' => 'Highlight Protection',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
