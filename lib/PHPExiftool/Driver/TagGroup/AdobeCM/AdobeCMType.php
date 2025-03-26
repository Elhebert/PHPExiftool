<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\AdobeCM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AdobeCMType extends AbstractTagGroup
{
    protected string $id = 'AdobeCM:AdobeCMType';

    protected string $name = 'AdobeCMType';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : JPEG::AdobeCM
             * line : 152427
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'JPEG::AdobeCM.AdobeCM:AdobeCMType',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
