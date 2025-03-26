<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\LNK;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LocalBasePath extends AbstractTagGroup
{
    protected string $id = 'LNK:LocalBasePath';

    protected string $name = 'LocalBasePath';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : LNK::LinkInfo
             * line : 161116
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'LNK::LinkInfo.LNK:LocalBasePath',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
