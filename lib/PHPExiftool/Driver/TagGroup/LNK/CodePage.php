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
class CodePage extends AbstractTagGroup
{
    protected string $id = 'LNK:CodePage';

    protected string $name = 'CodePage';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : LNK::ConsoleFEData
             * line : 161048
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'LNK::ConsoleFEData.LNK:CodePage',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
