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
class KeyFrameSampleCount extends AbstractTagGroup
{
    protected string $id = 'MXF:KeyFrameSampleCount';

    protected string $name = 'KeyFrameSampleCount';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Key Frame Sample Count',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116457
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:KeyFrameSampleCount',
            'desc' => [
                'en' => 'Key Frame Sample Count',
            ],
        ],
    ];

    protected int $count = 0;
}
