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
class RelativePath extends AbstractTagGroup
{
    protected string $id = 'LNK:RelativePath';

    protected string $name = 'RelativePath';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Relative Path',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : LNK::Main
             * line : 110364
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'LNK::Main.LNK:RelativePath',
            'desc' => [
                'en' => 'Relative Path',
            ],
        ],
    ];

    protected int $count = 0;
}
