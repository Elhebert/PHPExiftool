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
class XResolution extends AbstractTagGroup
{
    protected string $id = 'PreviewIFD:XResolution';

    protected string $name = 'XResolution';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'X Resolution',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::PreviewIFD
             * line : 137877
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::PreviewIFD.PreviewIFD:XResolution',
            'desc' => [
                'en' => 'X Resolution',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
