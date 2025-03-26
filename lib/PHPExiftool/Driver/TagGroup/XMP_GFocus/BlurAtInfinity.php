<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_GFocus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BlurAtInfinity extends AbstractTagGroup
{
    protected string $id = 'XMP-GFocus:BlurAtInfinity';

    protected string $name = 'BlurAtInfinity';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::GFocus
             * line : 397051
             * type : real
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::GFocus.XMP-GFocus:BlurAtInfinity',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
