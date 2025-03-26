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
class PortraitRawHighlight extends AbstractTagGroup
{
    protected string $id = 'CanonVRD:PortraitRawHighlight';

    protected string $name = 'PortraitRawHighlight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Portrait Raw Highlight',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonVRD::Ver2
             * line : 61248
             * type : int16s
             * writable : true
             * count :
             * flags :
             */
            'id' => 'CanonVRD::Ver2.CanonVRD:PortraitRawHighlight',
            'desc' => [
                'en' => 'Portrait Raw Highlight',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
