<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonVRD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class StandardRawHighlightPoint extends AbstractTagGroup
{
    protected string $id = 'CanonVRD:StandardRawHighlightPoint';

    protected string $name = 'StandardRawHighlightPoint';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Standard Raw Highlight Point',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonVRD::Ver2
             * line : 60618
             * type : int16s
             * writable : true
             * count :
             * flags :
             */
            'id' => 'CanonVRD::Ver2.CanonVRD:StandardRawHighlightPoint',
            'desc' => [
                'en' => 'Standard Raw Highlight Point',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
