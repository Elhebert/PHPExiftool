<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FlashPix;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OperationID extends AbstractTagGroup
{
    protected string $id = 'FlashPix:OperationID';

    protected string $name = 'OperationID';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Operation ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FlashPix::Operation
             * line : 87776
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::Operation.FlashPix:OperationID',
            'desc' => [
                'en' => 'Operation ID',
            ],
        ],
    ];

    protected int $count = 0;
}
