<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MOBI;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CreatorBuildNumber extends AbstractTagGroup
{
    protected string $id = 'MOBI:CreatorBuildNumber';

    protected string $name = 'CreatorBuildNumber';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Palm::EXTH
             * line : 273595
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Palm::EXTH.MOBI:CreatorBuildNumber',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
