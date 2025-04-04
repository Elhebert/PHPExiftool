<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SourceLength extends AbstractTagGroup
{
    protected string $id = 'MXF:SourceLength';

    protected string $name = 'SourceLength';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Source Length',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 118252
             * type : int64u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:SourceLength',
            'desc' => [
                'en' => 'Source Length',
            ],
        ],
    ];

    protected int $count = 0;
}
