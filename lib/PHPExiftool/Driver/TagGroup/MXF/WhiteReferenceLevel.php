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
class WhiteReferenceLevel extends AbstractTagGroup
{
    protected string $id = 'MXF:WhiteReferenceLevel';

    protected string $name = 'WhiteReferenceLevel';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'White Reference Level',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114452
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:WhiteReferenceLevel',
            'desc' => [
                'en' => 'White Reference Level',
            ],
        ],
    ];

    protected int $count = 0;
}
