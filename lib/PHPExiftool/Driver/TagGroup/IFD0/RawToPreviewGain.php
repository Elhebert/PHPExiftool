<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RawToPreviewGain extends AbstractTagGroup
{
    protected string $id = 'IFD0:RawToPreviewGain';

    protected string $name = 'RawToPreviewGain';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Raw To Preview Gain',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 84727
             * type : double
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'Exif::Main.IFD0:RawToPreviewGain',
            'desc' => [
                'en' => 'Raw To Preview Gain',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2064;
}
