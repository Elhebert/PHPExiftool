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
class LocalID extends AbstractTagGroup
{
    protected string $id = 'MXF:LocalID';

    protected string $name = 'LocalID';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Local ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116004
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:LocalID',
            'desc' => [
                'en' => 'Local ID',
            ],
        ],
    ];

    protected int $count = 0;
}
