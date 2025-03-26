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
class CodecName extends AbstractTagGroup
{
    protected string $id = 'Matroska:CodecName';

    protected string $name = 'CodecName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Matroska::Main
             * line : 173968
             * type : utf8
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Matroska::Main.Matroska:CodecName',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
