<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PreviewIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class YCbCrPositioning extends AbstractTagGroup
{
    protected string $id = 'PreviewIFD:YCbCrPositioning';

    protected string $name = 'YCbCrPositioning';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Y Cb Cr Positioning',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::PreviewIFD
             * line : 137903
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::PreviewIFD.PreviewIFD:YCbCrPositioning',
            'desc' => [
                'en' => 'Y Cb Cr Positioning',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
