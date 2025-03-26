<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Meta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MetaImageSize extends AbstractTagGroup
{
    protected string $id = 'Meta:MetaImageSize';

    protected string $name = 'MetaImageSize';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::Meta
             * line : 323928
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Meta.Meta:MetaImageSize',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
