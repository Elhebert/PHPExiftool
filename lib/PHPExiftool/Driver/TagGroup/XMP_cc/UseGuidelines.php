<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_cc;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UseGuidelines extends AbstractTagGroup
{
    protected string $id = 'XMP-cc:UseGuidelines';

    protected string $name = 'UseGuidelines';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Use Guidelines',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::cc
             * line : 281784
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::cc.XMP-cc:UseGuidelines',
            'desc' => [
                'en' => 'Use Guidelines',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
