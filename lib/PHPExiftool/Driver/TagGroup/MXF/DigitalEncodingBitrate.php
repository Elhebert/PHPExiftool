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
class DigitalEncodingBitrate extends AbstractTagGroup
{
    protected string $id = 'MXF:DigitalEncodingBitrate';

    protected string $name = 'DigitalEncodingBitrate';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Digital Encoding Bitrate',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116565
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:DigitalEncodingBitrate',
            'desc' => [
                'en' => 'Digital Encoding Bitrate',
            ],
        ],
    ];

    protected int $count = 0;
}
