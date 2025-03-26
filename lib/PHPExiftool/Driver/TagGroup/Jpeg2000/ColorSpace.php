<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Jpeg2000;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorSpace extends AbstractTagGroup
{
    protected string $id = 'Jpeg2000:ColorSpace';

    protected string $name = 'ColorSpace';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Jpeg2000::ColorSpec
             * line : 153737
             * type : int32u
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'Jpeg2000::ColorSpec.Jpeg2000:ColorSpace',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2064;
}
