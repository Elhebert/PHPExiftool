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
class ANCPayloadByteArray extends AbstractTagGroup
{
    protected string $id = 'MXF:ANCPayloadByteArray';

    protected string $name = 'ANCPayloadByteArray';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'ANC Payload Byte Array',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 118375
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ANCPayloadByteArray',
            'desc' => [
                'en' => 'ANC Payload Byte Array',
            ],
        ],
    ];

    protected int $count = 0;
}
