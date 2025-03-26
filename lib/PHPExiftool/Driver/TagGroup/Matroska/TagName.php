<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Matroska;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TagName extends AbstractTagGroup
{
    protected string $id = 'Matroska:TagName';

    protected string $name = 'TagName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Tag Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Matroska::Main
             * line : 119449
             * type : utf8
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Matroska::Main.Matroska:TagName',
            'desc' => [
                'en' => 'Tag Name',
            ],
        ],
    ];

    protected int $count = 0;
}
