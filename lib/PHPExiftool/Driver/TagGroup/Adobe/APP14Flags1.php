<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Adobe;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class APP14Flags1 extends AbstractTagGroup
{
    protected string $id = 'Adobe:APP14Flags1';

    protected string $name = 'APP14Flags1';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'APP14 Flags 1',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : JPEG::Adobe
             * line : 104879
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'JPEG::Adobe.Adobe:APP14Flags1',
            'desc' => [
                'en' => 'APP14 Flags 1',
            ],
        ],
    ];

    protected int $count = 0;
}
