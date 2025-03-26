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
class SampledYOffset extends AbstractTagGroup
{
    protected string $id = 'MXF:SampledYOffset';

    protected string $name = 'SampledYOffset';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 167864
             * type : int32s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:SampledYOffset',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
