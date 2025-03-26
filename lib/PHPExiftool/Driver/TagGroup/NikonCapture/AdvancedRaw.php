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
class AdvancedRaw extends AbstractTagGroup
{
    protected string $id = 'NikonCapture:AdvancedRaw';

    protected string $name = 'AdvancedRaw';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Advanced Raw',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCapture::Main
             * line : 141791
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCapture::Main.NikonCapture:AdvancedRaw',
            'desc' => [
                'en' => 'Advanced Raw',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
