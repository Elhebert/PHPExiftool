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
class BlockStartOffset extends AbstractTagGroup
{
    protected string $id = 'MXF:BlockStartOffset';

    protected string $name = 'BlockStartOffset';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Block Start Offset',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 117494
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:BlockStartOffset',
            'desc' => [
                'en' => 'Block Start Offset',
            ],
        ],
    ];

    protected int $count = 0;
}
